# NPSC Admin Panel - Testing Guide

## ✅ What's Been Built (Session 2)

### Filament Admin Resources Created:
1. **✅ Post Resource** - Full CMS with approval workflow
2. **✅ Category Resource** - Content organization

---

## 🚀 Test the Admin Panel NOW!

### Step 1: Access Admin Panel
```
URL: http://npsc.test/admin
Email: francismhalafu@gmail.com
Password: [your password]
```

### Step 2: Test Post Management

#### Create a Draft Post
1. Click **Posts** in sidebar
2. Click **New Post**
3. Fill in:
   - Title: "NPSC Launches GPS Tracking System"
   - Category: "Technology & Innovation"
   - Content: Write some test content
   - Upload a featured image (optional)
   - Slot Position: Leave as "Archive"
   - Status: "Draft"
4. Click **Create**

#### Submit for Approval
1. Edit the post you just created
2. Change Status to **"Pending Approval"**
3. Click **Save**

#### Approve & Publish (as Approver/Super Admin)
1. Go back to Posts list
2. You'll see **Approve** button (green checkmark)
3. Click **Approve**
4. Then click **Publish** button (rocket icon)
5. Post is now LIVE!

#### Test Slot System
1. Create another post
2. Set Slot Position to **"Hero"**
3. Publish it
4. Create a 3rd post, also set to **"Hero"**
5. **Notice**: The first post automatically moves to "Archive"!

---

## 📊 Features You Can Test

### Post Resource Features:
- ✅ **Rich Text Editor** - Format content with images, links, lists
- ✅ **Image Upload** - Featured images with editor
- ✅ **Auto-Slugs** - SEO-friendly URLs auto-generated
- ✅ **Slot System** - Hero + 3 Featured slots
- ✅ **Approval Workflow** - Draft → Pending → Approved → Published
- ✅ **SEO Fields** - Meta title, description, keywords
- ✅ **Filters** - By status, category, slot position
- ✅ **Search** - Search by title, content
- ✅ **Actions** - Approve, Publish buttons in table

### Category Resource Features:
- ✅ **Manage Categories** - Add/edit/delete
- ✅ **Types** - News, Programs, Reports
- ✅ **Post Count** - See how many posts per category
- ✅ **Active/Inactive** - Toggle visibility

---

## 🎯 What to Test

### Workflow Test:
1. **As Creator**: Create draft → Submit for approval
2. **As Approver**: Approve post
3. **As Publisher**: Publish post
4. **Result**: Post shows as "Published" ✅

### Slot Management Test:
1. Create 4 posts, assign to:
   - Post 1: Hero
   - Post 2: Featured 1
   - Post 3: Featured 2
   - Post 4: Featured 3
2. Create Post 5, assign to "Hero"
3. **Check**: Post 1 should now be in "Archive" slot

### Category Test:
1. Go to **Categories**
2. Create new category:
   - Name: "Training Updates"
   - Type: "News"
   - Active: Yes
3. Go back to Posts
4. Create post with new category
5. Check category shows in dropdown

---

## 🐛 Known Limitations (To Be Built Next)

- ❌ User role restrictions not yet enforced (coming next)
- ❌ Only Posts & Categories built so far
- ❌ No frontend yet (admin only for now)

### Still To Build:
- Match Resource
- Partner Resource
- Page Resource
- Contact Inquiry Resource
- Newsletter Subscriber Resource
- User management with roles
- Frontend website

---

## 💡 Tips

### Auto-Generated Fields:
- **Slug**: Auto-created from title (but you can customize)
- **Excerpt**: Auto-extracted from content if left empty
- **Meta Title**: Uses post title if left empty
- **Meta Description**: Uses excerpt if left empty

### Image Upload:
- Supports: JPG, PNG, WebP
- Automatically stored in `storage/app/public/posts/featured-images/`
- Has built-in image editor (crop, rotate)

### Rich Text Editor:
- Supports: Bold, Italic, Lists, Links, Images
- Can upload images directly into content
- Stored in `storage/app/public/uploads/`

---

## 📸 Screenshots to Take

Test and take screenshots of:
1. Posts list view
2. Create post form
3. Approval workflow (Draft → Pending → Approved → Published)
4. Slot management (Hero, Featured 1-3)
5. Category management

---

## ✅ Success Checklist

- [ ] Can log into admin panel
- [ ] Can create a draft post
- [ ] Can upload featured image
- [ ] Can submit post for approval
- [ ] Can approve post
- [ ] Can publish post
- [ ] Can assign post to slot (Hero/Featured)
- [ ] Slot system auto-archives previous post
- [ ] Can create/edit categories
- [ ] Categories show in post dropdown

---

## 🚨 If You Encounter Errors

### "403 Forbidden" on image upload:
Run in terminal:
```bash
php artisan storage:link
```

### "Class not found" errors:
Run:
```bash
composer dump-autoload
```

### Page not found:
Run:
```bash
php artisan route:cache
php artisan config:cache
```

---

**Next Session**: We'll build Match, Partner, Page, and Contact Inquiry resources, then start on the frontend!

**Test thoroughly and let me know what you think! 🎉**
