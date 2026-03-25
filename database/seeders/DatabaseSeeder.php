<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\HowItWorks;
use App\Models\Post;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Therapist;
use App\Models\User;
use App\PublishStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Sliders
        Slider::create([
            'title' => 'Your Path to Psychological Wellness Starts Here',
            'description' => 'Connect with licensed specialists for online or in-person therapy tailored to your unique journey.',
            'image' => 'front/images/80-service-1.webp',
            'status' => PublishStatus::Published,
            'order' => 1
        ]);

        // 2. Categories
        $catOnline = Category::create(['name' => 'Online Therapy', 'slug' => 'online-therapy', 'type' => 'blog']);
        $catAnxiety = Category::create(['name' => 'Anxiety Support', 'slug' => 'anxiety-support', 'type' => 'blog']);
        $catTeen = Category::create(['name' => 'Teen Therapy', 'slug' => 'teen-therapy', 'type' => 'blog']);
        $catSelfCare = Category::create(['name' => 'Self-Care', 'slug' => 'self-care', 'type' => 'blog']);

        $catServIndiv = Category::create(['name' => 'Individual', 'slug' => 'individual', 'type' => 'service']);

        // 3. Therapists
        $sarah = Therapist::create([
            'name' => 'Dr. Sarah Jenkins',
            'slug' => 'dr-sarah-jenkins',
            'role' => 'Clinical Psychologist',
            'image' => 'front/images/36e2a7ea656db63c186eb0a02e7fe5c656ed25665db2154081aff88f2f5671c4.jpeg',
            'phone' => '+1 (555) 000-0000',
            'office_phone' => '+1 (555) 111-1111',
            'email' => 'sarah.jenkins@tranquileshores.com',
            'bio' => 'Dr. Sarah Jenkins is a licensed clinical psychologist with over 15 years of experience in helping individuals navigate complex emotional landscapes.',
            'education' => [
                ['label' => 'PHD', 'value' => 'Clinical Psychology from Stanford University'],
                ['label' => 'MA', 'value' => 'Psychology from University of California']
            ],
            'certification' => 'Board Certified Psychologist',
            'expertise' => 'Anxiety, Depression, Trauma-informed care',
            'practice_years' => 15,
            'social_links' => [
                ['platform' => 'Instagram', 'url' => '#', 'icon' => 'bi-instagram'],
                ['platform' => 'LinkedIn', 'url' => '#', 'icon' => 'bi-linkedin']
            ],
            'tags' => ['Depression', 'Anxiety', 'Grief'],
            'status' => PublishStatus::Published
        ]);

        $michael = Therapist::create([
            'name' => 'Michael Johnson, LCSW',
            'slug' => 'michael-johnson',
            'role' => 'Licensed Clinical Social Worker',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600',
            'phone' => '+1 (555) 222-2222',
            'office_phone' => '+1 (555) 333-3333',
            'email' => 'michael.johnson@tranquileshores.com',
            'bio' => 'Michael specializes in adolescent mental health and family dynamics.',
            'education' => [['label' => 'MSW', 'value' => 'Master of Social Work, NYU']],
            'certification' => 'LCSW',
            'expertise' => 'Teen Therapy, Family Counseling',
            'practice_years' => 8,
            'social_links' => [['platform' => 'LinkedIn', 'url' => '#', 'icon' => 'bi-linkedin']],
            'tags' => ['Teenagers', 'Family', 'ADHD'],
            'status' => PublishStatus::Published
        ]);

        // 4. Services
        $s1 = Service::create([
            'title' => 'Individual Online Therapy',
            'slug' => 'individual-online-therapy',
            'subtitle' => 'Flexible, private sessions from home.',
            'description' => 'Personalized support for your mental health journey via secure video calls.',
            'image' => 'front/images/80-service-1.webp',
            'category_id' => $catServIndiv->id,
            'status' => PublishStatus::Published,
            'order' => 1,
            'bg_color' => '#FAEEB5'
        ]);

        Service::create([
            'title' => 'Individual Walk & Talk',
            'slug' => 'walk-and-talk-therapy',
            'subtitle' => 'Nature-based healing in motion.',
            'description' => 'Experience therapy while walking in local parks for a unique perspective.',
            'image' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=800',
            'category_id' => $catServIndiv->id,
            'status' => PublishStatus::Published,
            'order' => 2,
            'bg_color' => '#FBF7F4'
        ]);

        Service::create([
            'title' => 'Couples Therapy',
            'slug' => 'couples-therapy',
            'subtitle' => 'Strengthen your bond together.',
            'description' => 'Navigate relationship challenges with professional guidance.',
            'image' => 'https://images.unsplash.com/photo-1516589174184-c68d196f4544?auto=format&fit=crop&w=800',
            'category_id' => $catServIndiv->id,
            'status' => PublishStatus::Published,
            'order' => 3,
            'bg_color' => '#B5C8B8'
        ]);

        Service::create([
            'title' => 'Teen Therapy',
            'slug' => 'teen-therapy',
            'subtitle' => 'Support for the younger generation.',
            'description' => 'Helping adolescents manage stress, school, and identity.',
            'image' => 'https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=800',
            'category_id' => $catServIndiv->id,
            'status' => PublishStatus::Published,
            'order' => 4,
            'bg_color' => '#F8DAD2'
        ]);

        // 5. Posts
        Post::create([
            'title' => 'How Online Therapy Can Support Your Mental Health',
            'slug' => 'how-online-therapy-supports-mental-health',
            'main_image' => 'front/images/80-service-1.webp',
            'additional_images' => [
                'https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=600',
                'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=800'
            ],
            'summary' => 'Discover the unique benefits of virtual counseling and how it can fit into your life.',
            'content' => 'In recent years, the landscape of mental health support has undergone a significant transformation...',
            'author_id' => $sarah->id,
            'category_id' => $catOnline->id,
            'status' => PublishStatus::Published,
            'published_at' => now()
        ]);

        // 6. Pricing Plans
        PricingPlan::create([
            'title' => 'Individual Online Therapy',
            'price' => 130,
            'unit' => 'per 50 minute session',
            'description' => 'Best for those seeking convenience and privacy.',
            'features' => ['Video sessions', 'Encrypted messaging', 'Self-care resources'],
            'icon' => 'bi-laptop',
            'order' => 1,
            'status' => PublishStatus::Published
        ]);
        PricingPlan::create([
            'title' => 'Individual Walk & Talk',
            'price' => 140,
            'unit' => 'per session',
            'description' => 'Combine physical activity with therapeutic progress.',
            'features' => ['In-person meetups', 'Nature environment', 'Breathwork techniques'],
            'icon' => 'bi-tree',
            'order' => 2,
            'status' => PublishStatus::Published
        ]);
        PricingPlan::create([
            'title' => 'Couples Therapy',
            'price' => 150,
            'unit' => 'per session',
            'description' => 'Strengthen your relationship with professional guidance.',
            'features' => ['Joint sessions', 'Communication tools', 'Conflict resolution'],
            'icon' => 'bi-people',
            'order' => 3,
            'status' => PublishStatus::Published
        ]);

        // 7. How It Works
        HowItWorks::create(['step_number' => '1', 'title' => 'Choose a Therapist', 'description' => 'Browse licensed specialists to find your best match.', 'order' => 1]);
        HowItWorks::create(['step_number' => '2', 'title' => 'Book a Session', 'description' => 'Select a time that works for your schedule.', 'order' => 2]);
        HowItWorks::create(['step_number' => '3', 'title' => 'Start Your Journey', 'description' => 'Begin your path to mental wellness today.', 'order' => 3]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
