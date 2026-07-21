<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Projects
        $projects = [
            [
                'slug'        => 'neo-finance',
                'category'    => 'Mobile / Fintech',
                'filter'      => 'mobile',
                'title'       => 'NEO-FINANCE ECOSYSTEM',
                'description' => 'A comprehensive digital transformation for Neo-Finance, bridging the gap between architectural project management and real-time capital flow. We developed a custom design system that prioritizes structural clarity and high-speed transaction visibility.',
                'image'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBR7-RIXU7xSvHL8nYtFRu7N9xkaYDRtWOiBfi-Z3iFk3s-gZPvstS05pVvZgUsTsw-mPH94wlXnqCG2IezHrtENOm8yrAvSGZ-vPhu7W8pNxHtdbazH_PhFWAnri4lgv-_BYorXfmk704rljdvc4kl2KriM61Y8bLHlDQo0_UKqK9SmjLchzJ_fJxRjla41BlV-yU4-JQdQHVqbiAUZMaQIeCLYK_yF1Pare8kWQALSM-6rVDSvGFO',
                'cta_label'   => 'VIEW CASE STUDY',
                'featured'    => true,
                'layout'      => 'large', // col-span-8
            ],
            [
                'slug'        => 'core-architects',
                'category'    => 'Branding',
                'filter'      => 'branding',
                'title'       => 'CORE ARCHITECTS',
                'description' => 'Visual identity for an avant-garde structural engineering firm.',
                'image'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCdaApwRYko-hlrTNsr_n_vGMTc0CULDo1amzO11p2XJJH0pk8iIXcu_a6I3RM2D3u13lSmQHJXV1oqH6e-f5AlflR1xt8K2Oq8xSpQ573FezWnLyDwzbh9Xxb4E9aLBPJIT-G0WhXpM1EN8eLWDYx7ntXPz1TnFxOOXIiaA5-q_XdHD4LUAporVKoJZJbbrsJP0NRqWsaQEwXjmDmddhtgCiWuOp5MPX8EEHI7oQXtUN28V8q4Ist1',
                'cta_label'   => 'VIEW PROJECT',
                'featured'    => false,
                'layout'      => 'small', // col-span-4
            ],
            [
                'slug'        => 'data-stream',
                'category'    => 'Web / SaaS',
                'filter'      => 'web',
                'title'       => 'DATA STREAM V3',
                'description' => 'Empowering real-time analytics with structural clarity.',
                'image'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB0zPzm9UBZSTN26XZCW1KPyioGOAaV_SdmwUXXoZLIl4xUlFMwhpy2JqXuW0kaMuIpAj3ZK936ltSCsJHeyev0oZihWpmZ7tRzgu9ldaWeBWEfyJzLGjuAqV8zzJrATqqAxbdT6zTtWUuZjwaAZTb6OOGMK_F8Q85fXC1si8P8L_gWaibrbNOM60JZ5qIjMgVYlaMsmL5iECbvCWy-cPJAEypj5dSYF36Ny9MGixIxe5KSoubixZVY',
                'cta_label'   => 'VIEW PROJECT',
                'featured'    => false,
                'layout'      => 'small', // col-span-4
            ],
            [
                'slug'        => 'momentum-campaign',
                'category'    => 'Marketing',
                'filter'      => 'marketing',
                'title'       => 'MOMENTUM CAMPAIGN',
                'description' => 'The Momentum Campaign redefined tech startup launches. Through a series of high-impact digital artefacts and a disruptive social strategy, we achieved a 300% increase in qualified leads within the first 30 days of deployment.',
                'image'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAIH0VfSGdEH5Eb3KhBtcuSqABdtQWfvZRz_yvlmKt1QZ-duLhOIWmNxlnduRwIv1jr5C_duo-Q3rK8f6dtKlb1NcYYglVkPj7x6P6gFuwTpqy4HYLqY30vC6wGEl7TTYpyqr264kEjt9iKW8WYr5ezUqZO4RmE_F3MVHRLqcsU8amaMH6yjG-OyrxfudQRQrnaPPLFFg5h0Gqx173fOBjPH_By1aGhtC1MB_c0OZJbsJYMznkARgPY',
                'cta_label'   => 'READ THE STORY',
                'featured'    => false,
                'layout'      => 'wide', // col-span-8 horizontal
            ],
        ];
        foreach ($projects as $project) {
            \App\Models\Project::updateOrCreate(['slug' => $project['slug']], $project);
        }

        // Services
        $services = [
            [
                'slug'        => 'digital-marketing',
                'icon'        => 'trending_up',
                'icon_bg'     => 'bg-tertiary-fixed',
                'title'       => 'Digital Marketing',
                'description' => 'Data-driven campaigns that penetrate noise. We specialize in high-impact performance marketing, viral strategy, and precision-targeted acquisition.',
                'features'    => ['Growth Strategy', 'Paid Acquisition', 'Content Ecosystems', 'Data Analytics'],
                'cta_label'   => 'Learn More',
                'variant'     => 'default',
            ],
            [
                'slug'        => 'web-mobile-dev',
                'icon'        => 'terminal',
                'icon_bg'     => 'bg-secondary-container',
                'title'       => 'Web & Mobile Dev',
                'description' => 'Architecting robust, scalable platforms. From custom SaaS dashboards to fluid mobile applications, we code for the future with bleeding-edge stacks.',
                'features'    => ['React / Next.js', 'Native Mobile', 'Headless Architecture', 'API Integration'],
                'cta_label'   => 'View Stack',
                'variant'     => 'featured', // dark bg
            ],
            [
                'slug'        => 'ui-ux-design',
                'icon'        => 'brush',
                'icon_bg'     => 'bg-primary-fixed',
                'title'       => 'UI/UX Design',
                'description' => 'Brutalist aesthetics meets functional clarity. We design interfaces that challenge conventions while maintaining uncompromising usability.',
                'features'    => ['Design Systems', 'Rapid Prototyping', 'Brand Identity', 'User Research'],
                'cta_label'   => 'Explore Design',
                'variant'     => 'default',
            ],
            [
                'slug'        => 'cloud-solutions',
                'icon'        => 'cloud',
                'icon_bg'     => 'bg-error-container',
                'title'       => 'Cloud Solutions',
                'description' => 'Optimizing infrastructure for peak performance. We manage complex cloud migrations, serverless deployments, and bulletproof security.',
                'features'    => ['AWS / Azure / GCP', 'DevOps Automation', 'Cyber Security', 'Serverless Ops'],
                'cta_label'   => 'Secure Now',
                'variant'     => 'offset', // lg:-translate-y-8
            ],
            [
                'slug'        => 'seo-dominance',
                'icon'        => 'search',
                'icon_bg'     => 'bg-primary',
                'title'       => 'SEO Dominance',
                'description' => 'Search engine results are a battlefield. We provide the weaponry for top-tier rankings through technical SEO and semantic content strategies.',
                'features'    => ['Technical Audits', 'Keyword Warfare', 'Backlink Acquisition', 'Semantic Content'],
                'cta_label'   => 'Get Ranked',
                'variant'     => 'accent', // green bg
            ],
        ];
        foreach ($services as $service) {
            \App\Models\Service::updateOrCreate(['slug' => $service['slug']], $service);
        }

        // Blog Posts
        $posts = [
            [
                'category'    => 'Engineering',
                'title'       => 'Beyond the Code: Building Architectural Legacies in the Digital Realm.',
                'excerpt'     => 'Discover how PIXLYNC is redefining structural integrity in web applications by applying classic architectural principles to modern cloud infrastructure and frontend systems.',
                'published_at'=> '2024-10-24',
                'read_time'   => '12 Min Read',
                'author'      => 'Alex Rivera',
                'image'       => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCHWZS8r9yu_mBcWVKMNwhw-En0ymCV2PKmXjKTslzDMzxAkXxaGh83fBAvgG7iYJkzdwDMp7HJnt9zJU0r0IQkOgCachNw2psDuNijII58gzVHDllMu-s9FHgkniC3X-cIXGfpMmx4rVWhwi2vx4G7ADEBvm1GAi7NAo69j4Q36KJPda4iF9xe9vemYilEyX9Wbc1ocEE7hvETWXFr-dHzXIOXxWAIvSesDPDM0EH24aF10JuplZWV',
                'is_featured' => true,
            ],
            [
                'category'  => 'Strategy',
                'published_at'      => '2024-09-12',
                'read_time' => '5 Min Read',
                'title'     => 'The Brutalist Blueprint for Market Domination',
                'excerpt'   => 'Stripping away the fluff: how we use radical honesty and bold aesthetics to build brands that can\'t be ignored.',
                'image'     => 'https://lh3.googleusercontent.com/aida-public/AB6AXuClT6dZkC3GOgMaZUM9K5YOq5gNVpKEMWM8LTa0BnRSb5fHlQz2SwWVLP7Ls4ysyWKaLix7wKisu7XHV-jr61gPhKAcu6AKouawD26yXoxxevrcM6eYeyzdyRddLVTvegiIq7SJkbWygpK8ToVCeGPsnU67h5dmkdMFHoOD-Ed3uEYEX1jMPnHJpdzmm0zPlcrBLVdXmy3wikA6zz-It9vhGKELPWoBcZxLGJezbVgYYp2UHyAwZQav',
                'is_featured' => false,
            ],
            [
                'category'  => 'Product',
                'published_at'      => '2024-08-30',
                'read_time' => '8 Min Read',
                'title'     => 'Tactile Interfaces in a Touchless World',
                'excerpt'   => 'Designing digital products that feel physical. Exploring the psychology of shadows and borders in modern UI.',
                'image'     => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBiDtloQNXhCQNV_7pDKCBJeqxsKG03yzM_7qYqAM0PlV2apRW4n7tcvHVR8g7MGuhwGAAnd0NrvEMEwbbyFsnlaQB4fD8PI4VPavV5jeRKY-tLu7D6Xx2WB1uBgLkmqy3ueyG-YHqZOnxKVr_KQ4e0lrUGDb15pzDXO94v8ISk1TxPGUKVCFdKYIlRIkdu8BkOtq1zqJytSqPppXOPiqEjiFQAv7JwWwyOdFo1JJXo-OV_JcPTMj8L',
                'is_featured' => false,
            ],
            [
                'category'  => 'Design',
                'published_at'      => '2024-08-15',
                'read_time' => '15 Min Read',
                'title'     => 'Nature-Tech: The Forest Green Revolution',
                'excerpt'   => 'Why our signature palette isn\'t just about style—it\'s about the subconscious link between growth and stability.',
                'image'     => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAU0jihP2WiinnNqMqAboYh80b8nDTygXkZllYkaPY8pujojWnN7QoJEiNyQz861J2nJAeBESOucxTfFbB6k2nosgN63EWuOg6lET3U0BCDgKD3uZCLJX5kFvjiNzvLcwb4A-8RI6SfsIhIWMwrw6Z-eAexLu-Zuf9cJvBIQFZiDgcOjB6hfhP9RKQI0mMAO6hraCT_veKlvsLGEBY58-1S_ODoFEHMRKnXTm8dqfsw2D1yO6-evEsa',
                'is_featured' => false,
            ],
            [
                'category'  => 'Engineering',
                'published_at'      => '2024-07-22',
                'read_time' => '10 Min Read',
                'title'     => 'Monolithic vs. Micro: Finding Balance',
                'excerpt'   => 'An architectural deep-dive into choosing the right backend structure for scaling creative agencies.',
                'image'     => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCD_ye38cwJKNqOMot-GRmBxGQ5Rhyoe-FiQMj12417gjMk3gGyWuNxE3qTy9UyHeoxy72Q2nkgSFV15V9h7s67jCEmS4m-6GBscYiwfDyBpgacqXLBzvgXhPXQ4BgcLUY41qRs9nH-HZoQEKjTvL3YQW5HkPp0lEAOgMco7-VZl9MpcNvru8KQdFf5hIXOchRtW7y_QvbwvZp6LYA9SOKdT5yyxDKTEE9sa_I7V2vNIA7HrZaOUa3q',
                'is_featured' => false,
            ],
            [
                'category'  => 'Strategy',
                'published_at'      => '2024-06-05',
                'read_time' => '6 Min Read',
                'title'     => 'Digital Artefacts: Why We Build to Last',
                'excerpt'   => 'Moving away from disposable web design towards digital experiences that age like fine architecture.',
                'image'     => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAQ6GvV6USLZPE-5unFFvHjmEZqPzHihuV2jGJ8HEZWXx5yy0ZIvCHKAmYHRVdo-dWHovutypXHV0fpNa0XIqwfekPEs8_9oHZgrUGyAOChzM7tFv9NsNRrdJAPwblcJ_ckG3WMa1jdW0-5-UgHnj6GKDQ0XNIV-_QvcPTjSc8JXaimmoi2mQfcNsa4DMIAW7TNIvu2iygq-X4Iasfn6acd1Xcgi8jJAzOdhY-xdn7vwi60lvb_Peba',
                'is_featured' => false,
            ],
            [
                'category'  => 'Product',
                'published_at'      => '2024-05-18',
                'read_time' => '7 Min Read',
                'title'     => 'The Power of Asymmetry in Conversion',
                'excerpt'   => 'How breaking the grid can actually lead the user\'s eye more effectively to your primary call to action.',
                'image'     => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAyA9W-nxFGGX8fro9SebSzooRysDcODk7VnNwxm9YU7FxPMoOppzM15b8GwqHcNKMePrnHtmumJbnqVFkgXi56Dh-ALXb3QQ4F0l0UhlsH3qSHekv9XQa74Dj97J2uyDN7oFjOr32CACIzb_dyXD19iLAeAdRRJ66IpS6-roxvyEqSnTcC2FTCSH6etT7jT38WL3NNtiFOztr67nzl4kQO-8cw-T2tMpO6CaHemzH-pyVHbXE87mPs',
                'is_featured' => false,
            ],
        ];

        foreach ($posts as $post) {
            \App\Models\BlogPost::updateOrCreate(['title' => $post['title']], $post);
        }
    }
}
