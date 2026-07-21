<?php

namespace App\Http\Controllers;

use App\Models\AboutSetting;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index()
    {
        // ── About Settings (hero text, stats, global section) ──────────────
        $settings = AboutSetting::getSingleton();

        $stats = [
            ['value' => $settings->stat1_value ?: '240+', 'label' => $settings->stat1_label ?: 'Projects Delivered'],
            ['value' => $settings->stat2_value ?: '18',   'label' => $settings->stat2_label ?: 'Global Partners'],
            ['value' => $settings->stat3_value ?: '04',   'label' => $settings->stat3_label ?: 'Design Awards'],
        ];

        $offices = $settings->offices
            ? array_map('trim', explode(',', $settings->offices))
            : ['OSLO', 'TOKYO', 'NY', 'SINGAPORE'];

        // ── Team Members ────────────────────────────────────────────────────
        $dbTeam = TeamMember::orderBy('sort_order', 'asc')->orderBy('id', 'asc')->get();

        if ($dbTeam->isNotEmpty()) {
            $team = $dbTeam->map(fn ($m) => [
                'name'   => $m->name,
                'role'   => $m->role,
                'badge'  => $m->badge,
                'offset' => (bool) $m->is_offset,
                'image'  => $m->image
                    ? asset('storage/' . $m->image)
                    : 'https://ui-avatars.com/api/?name=' . urlencode($m->name) . '&size=600&background=1A1A1A&color=F5E642',
            ])->all();
        } else {
            // Fallback hardcoded team
            $team = [
                [
                    'name'   => 'Marcus Chen',
                    'role'   => 'Founder & Executive Creative Director',
                    'badge'  => 'Creative Lead',
                    'offset' => false,
                    'image'  => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAdSZYtoZLmj32SwQcwj5TTM07yYVfNLAeqtW-h-jZuTU2nR7d_BLOy5BWiSsCdSK9XRqQXgvYoj1PlORUzDDi6_WNjCVzM8Q3OOKmbW_F5npBGFPvnTQwfn_aQ2Cf5jXXZ7jdkBU_Z7NTM3t3e2l5gjKkjUH4dL3qUDv-R2UfYmn5kf4co2JNrlRj6CsXxpYgDAhZgG23i5XLF3vA4xOGVsRrlfm6U9gRCDe9wjR27aI5UpzLRiPcT',
                ],
                [
                    'name'   => 'Sarah Jenkins',
                    'role'   => 'Chief Technology Officer & Partner',
                    'badge'  => 'System Architect',
                    'offset' => true,
                    'image'  => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAHlHnwyKBe0ApWUeRG1yjUOcu-F122q4xarM202AXu6B6NFVzRbYTpkKYsjkdKoXOE2N3FNz4Z9uwiFbPULtHkCSn9mcltCS4wtIC112A0W-pF5y7_5LQ1F-pRWCTG1gvdKNioypiHMqZBTImip4CtgxuT6B-3MD7-a91t68dKCdo6nFJgYSctt0Z0ggKbZHAAfdS8b6ypX1z-nsEuMuAnHbzwbs9mronkfht5FGSx-IZuMWIBX-e7',
                ],
                [
                    'name'   => 'Aiden Kross',
                    'role'   => 'Head of Digital Strategy',
                    'badge'  => 'Strategy Lead',
                    'offset' => false,
                    'image'  => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC88LEkUG8BVnbK354WuCF4qZVr8gR41e17uh1uD7ITlCrlVAO9lYJXaE2w4d2FILQ5JJi96V-t11CR-M2rbMFbC4kH5_wpTue3U3n9YUu7xnas5joTsxjamHi7UMajKDboUVpcwf41ZLOCVA1Md3brqS2oNM8cdgPORz5FoDZq_h-8wWem4lwnfAg-vysf-7yW5ov1cxXPaKq2mrZsGmqvqcs8BuBQlnxyaq7WHWOa1esV1j8ENJKq',
                ],
                [
                    'name'   => 'Elena Vance',
                    'role'   => 'Principal Product Designer',
                    'badge'  => 'User Experience',
                    'offset' => true,
                    'image'  => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBDtSPgOWfAEPvFklOsxGs1zczzxER7WicdjOsNeVdwtq4aP7JacymQxUWP9EaEMMmGsQ38lkiW3Sdlah4DdrUje8KHuFsdQAbQDt6sCe4JD7co20GrUI9uecSZKFgxMEGP0QdPkyQZybbr6H-pPuPk724H3S6Mu5z51E2tCceJl65SsP_knQb60symxfhIo2WTTpvnWPbhAyt20WNPOQLH24iMt8ImqGfnOX2Tp19uLjJtuPOHL8gT',
                ],
            ];
        }

        // ── Jobs (hardcoded, can be extracted to DB later) ──────────────────
        $jobs = [
            [
                'badge'       => 'NEW',
                'badge_class' => 'bg-tertiary-fixed text-primary',
                'title'       => 'Senior Creative Developer',
                'stack'       => 'Three.js / WebGL / React',
            ],
            [
                'badge'       => 'URGENT',
                'badge_class' => 'bg-secondary-container text-primary',
                'title'       => 'Lead Product Designer',
                'stack'       => 'Figma / Systems / UX Strategy',
            ],
        ];

        return view('about.index', compact('settings', 'stats', 'team', 'jobs', 'offices'));
    }
}
