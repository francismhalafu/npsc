# NPSC Website - Setup Instructions

## Progress Status
✅ Database migrations created (7 tables)
⏳ Waiting for Composer packages installation
🔜 Next: Install Filament & run migrations

---

## Step 1: Install Required Packages (Windows Terminal)

Open **PowerShell** or **CMD** in `C:\laragon\www\NPSC` and run:

```bash
# Install Filament Admin Panel
composer require filament/filament:"^3.2" -W

# Install Spatie Media Library (for image management)
composer require spatie/laravel-medialibrary

# Install Spatie Laravel Permission (for user roles)
composer require spatie/laravel-permission

# Install Filament Panel
php artisan filament:install --panels

# Publish permission migrations
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

---

## Step 2: Run Database Migrations

```bash
php artisan migrate
```

This will create the following tables:
- ✅ `categories` - News categories (Match Reports, Academy News, etc.)
- ✅ `posts` - News/Blog posts with slot system
- ✅ `matches` - Fixtures and results
- ✅ `partners` - Sponsors/Partners
- ✅ `pages` - Static pages (About, Academy, etc.)
- ✅ `contact_inquiries` - Contact form submissions
- ✅ `newsletter_subscribers` - Email subscribers
- ✅ `site_settings` - Site-wide settings

---

## Step 3: Create First Admin User

```bash
php artisan make:filament-user
```

Follow the prompts to create your admin account.

---

## Database Structure Created

### Posts Table (News/CMS)
- Slot-based system: `hero`, `featured_1`, `featured_2`, `featured_3`, `archive`
- Approval workflow: `draft` → `pending_approval` → `approved` → `published`
- SEO fields included
- Category relationships
- Creator & Approver tracking

### Matches Table
- Full match details (opponent, venue, competition)
- Results tracking (NPSC score, opponent score, result)
- Match reports with images
- Statistics (JSON field for possession, shots, etc.)
- Lineup management

### Partners Table
- Tiered system: Main Partner, Official Sponsor, Community Partner
- Display controls (homepage, footer)
- Partnership duration tracking

### Contact Inquiries
- Multiple inquiry types (general, sponsorship, academy, media, volunteer, partnership)
- Status workflow (new, read, replied, archived)
- Admin notes field

### Newsletter Subscribers
- Email verification system
- Subscribe/Unsubscribe tracking

---

## Next Steps After Package Installation

1. Create Models with relationships
2. Set up Filament Resources (admin CRUD interfaces)
3. Configure user roles & permissions
4. Build frontend Blade templates
5. Implement Tailwind CSS styling

---

## Questions?
Contact: Francis (CEO) | Daddy Gilbert (Chairperson)

Northern Pride Sports Club
"Excellence on the field, Impact off the field"
