# 🚀 NPSC Website - Quick Start Guide

## ✅ Everything is Ready!

Your Northern Pride Sports Club website is complete and running!

---

## 🌐 Access Your Website

### Frontend Website
**URL:** http://npsc.test/

### Admin Panel
**URL:** http://npsc.test/admin/login

**Login Credentials:**
- Email: `francismhalafu@gmail.com`
- Password: `password` (or the password you set during seeding)

---

## 📋 Development Server Status

✅ **Vite Dev Server** - Running (compiling assets in real-time)
✅ **Alpine.js** - Installed and working
✅ **Tailwind CSS v4** - Configured with NPSC brand colors
✅ **All Routes** - Configured and working
✅ **Database** - Migrated and seeded

---

## 🎯 Available Pages

| Page | URL | Description |
|------|-----|-------------|
| Homepage | `/` | Hero + 3 featured stories |
| News Archive | `/news` | All published articles with search |
| Single Article | `/news/{slug}` | Full article view |
| Vision & Mission | `/about/vision-mission` | Core values & mission |
| Leadership | `/about/leadership` | Team members |
| Strategic Plan | `/about/strategic-plan` | 2025-2030 roadmap |
| Academy | `/academy` | Elite training program |
| Grassroots | `/grassroots` | Community programs |
| Fixtures & Results | `/fixtures-results` | Match schedule |
| Contact | `/contact` | Contact form |

---

## 📝 First Steps - Add Content

### 1. Create Your First Post (Hero)

1. Go to **http://npsc.test/admin**
2. Click **Posts** → **Create**
3. Fill in:
   - **Title**: Your main headline
   - **Content**: Full article text (use rich editor)
   - **Featured Image**: Upload a 1920x1080 image
   - **Category**: Select appropriate category
   - **Slot Position**: Select **"Hero (Main Featured)"**
   - **Status**: Select **"Published"**
   - **Published At**: Set to current date/time
4. Click **Create**

### 2. Create 3 Featured Posts

Repeat the above process 3 times, but select:
- **"Featured Story 1"**
- **"Featured Story 2"**
- **"Featured Story 3"**

### 3. Add a Match

1. Go to **Matches** → **Create**
2. Fill in match details
3. Set **Status** to **"Scheduled"** for upcoming or **"Completed"** for results
4. Click **Create**

### 4. Upload Partner Logos

1. Go to **Partners & Sponsors** → **Create**
2. Upload logo (400x400px PNG recommended)
3. Select **Tier** (Main Partner, Official Sponsor, Community Partner)
4. Check **Show on Homepage** and **Show in Footer**
5. Click **Create**

---

## 🎨 Brand Colors Reference

Use these in your content:

- **NPSC Black**: `#000000`
- **NPSC White**: `#FFFFFF`
- **NPSC Gold**: `#D4AF37` (Primary accent)
- **NPSC Blue**: `#1E3A5F` (Secondary accent)
- **NPSC Gray**: `#1F2937`

---

## 🔧 Important Technical Notes

### Model Name Change
The `Match` model was renamed to `FootballMatch` to avoid PHP 8 reserved keyword conflict.

**File location:** `app/Models/FootballMatch.php`

This is already configured in:
- `MatchResource.php`
- `MatchController.php`

### Vite Dev Server
The development server must be running for assets to compile:

```bash
npm run dev
```

**Status:** Currently running in background ✅

To stop: Find the process and kill it, or restart terminal.

---

## 📱 Mobile Testing

The website is fully responsive. Test on:
- Mobile (320px+)
- Tablet (768px+)
- Desktop (1024px+)

Use browser DevTools to test different screen sizes.

---

## 🎓 Content Guidelines

### Writing Great Posts

**Hero Post:**
- Most important news
- Big announcements
- Major achievements
- Use compelling 1920x1080 image

**Featured Posts:**
- Recent highlights
- Match reports
- Academy updates
- Community stories

**Archive Posts:**
- Older content
- Reference material
- Historical articles

### SEO Tips

1. **Title**: 50-60 characters
2. **Excerpt**: 120-155 characters
3. **Meta Description**: Auto-populated from excerpt
4. **Featured Image**: Always include with alt text
5. **Category**: Choose relevant category
6. **Keywords**: Use naturally in content

### Image Sizes

- **Hero/Featured Images**: 1920x1080px (landscape)
- **Article Images**: 1200x800px (landscape)
- **Partner Logos**: 400x400px (square, transparent PNG)
- **Team Photos**: 800x800px (square)

---

## ✨ Features Built-In

✅ Dynamic hero section from database
✅ 3 featured story cards
✅ News search & filtering
✅ Contact form with 6 inquiry types
✅ Newsletter subscription
✅ Partner logos display
✅ Match fixtures & results
✅ Mobile responsive navigation (Alpine.js)
✅ Social media sharing buttons
✅ SEO optimized meta tags
✅ View counter on articles
✅ Related posts suggestions
✅ Admin approval workflow

---

## 🚨 Troubleshooting

### "Vite manifest not found"
**Solution:** Make sure `npm run dev` is running

### "Class 'Match' not found"
**Solution:** Already fixed - using `FootballMatch` model

### Styles not loading
**Solution:** Clear browser cache and refresh

### Admin panel not accessible
**Solution:** Check that user exists and has correct role:
```bash
php artisan tinker
User::first()->assignRole('super_admin');
```

---

## 📞 Need Help?

Check the complete documentation:
- `ADMIN_PANEL_COMPLETE.md` - Admin features
- `FRONTEND_COMPLETE.md` - Frontend features
- `PROGRESS_REPORT.md` - Technical details

---

## 🎉 You're All Set!

Your professional football club website is ready to go! Start adding content through the admin panel and watch your website come to life.

**Next:** Add your first hero post and 3 featured stories to populate the homepage! 🚀
