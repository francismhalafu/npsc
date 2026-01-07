# 🔧 Troubleshooting Guide - NPSC Website

## 🚨 Admin Login Error: "POST method not supported"

### Quick Fix (Most Common)

**Option 1: Clear All Caches**

Open **Command Prompt** in `C:\laragon\www\NPSC\` and run:

```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
php artisan view:clear
php artisan optimize:clear
```

Or simply double-click: **`fix-routes.bat`**

Then refresh your browser and try logging in again.

---

**Option 2: Stop and Restart Laragon**

1. Stop Laragon completely
2. Restart Laragon
3. Make sure services are running (Apache/Nginx, MySQL)
4. Try accessing http://npsc.test/admin again

---

**Option 3: Check if Filament is Properly Installed**

Run in terminal:
```bash
php artisan about
```

Look for Filament in the output. If missing, run:
```bash
composer require filament/filament:"^3.0"
```

---

## 🔍 Other Common Issues

### Issue: "Vite manifest not found"

**Solution:**
Make sure the dev server is running:
```bash
npm run dev
```

Keep this terminal open while developing.

---

### Issue: Blank Homepage or "Welcome" Page

**Cause:** Routes not loading or cache issue

**Solution:**
```bash
php artisan route:clear
php artisan config:clear
php artisan cache:clear
```

Then refresh browser.

---

### Issue: "Class 'Match' not found" or "Class 'FootballMatch' not found"

**Solution:**
```bash
composer dump-autoload
```

The Match model was renamed to FootballMatch to avoid PHP 8 keyword conflict.

---

### Issue: Styles Not Loading

**Solutions:**

1. **Check Vite is running:**
   ```bash
   npm run dev
   ```

2. **Clear browser cache:**
   - Chrome: Ctrl + Shift + Delete
   - Or hard refresh: Ctrl + F5

3. **Rebuild assets:**
   ```bash
   npm run build
   ```

---

### Issue: Database Connection Error

**Solution:**

1. Make sure MySQL is running in Laragon
2. Check `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=npsc
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. Run migrations:
   ```bash
   php artisan migrate
   ```

---

### Issue: Can't Access Admin Panel After Creating User

**Solution:**

Make sure user has correct role:

```bash
php artisan tinker
```

Then in tinker:
```php
$user = User::where('email', 'francismhalafu@gmail.com')->first();
$user->assignRole('super_admin');
exit
```

---

### Issue: Alpine.js Not Working (Mobile Menu Not Opening)

**Solutions:**

1. **Check if Alpine is loaded:**
   - Open browser DevTools (F12)
   - Console tab
   - Type: `Alpine`
   - Should show object, not undefined

2. **Make sure dev server is running:**
   ```bash
   npm run dev
   ```

3. **Check for JavaScript errors:**
   - Open DevTools Console
   - Look for red error messages
   - Fix any errors shown

---

### Issue: Images Not Uploading

**Solutions:**

1. **Check storage link:**
   ```bash
   php artisan storage:link
   ```

2. **Check folder permissions:**
   - `storage/app/public` should be writable

3. **Check `.env` file:**
   ```
   FILESYSTEM_DISK=public
   ```

---

## 🔐 Admin Panel Access Issues

### Can't Login - Credentials Not Working

**Reset Password:**

```bash
php artisan tinker
```

```php
$user = User::where('email', 'francismhalafu@gmail.com')->first();
$user->password = bcrypt('newpassword123');
$user->save();
exit
```

Then login with: `newpassword123`

---

### "Too Many Redirects" Error

**Solution:**
```bash
php artisan config:clear
php artisan route:clear
```

Check `.env`:
```
APP_URL=http://npsc.test
```

---

## 🚀 Performance Issues

### Website Loading Slowly

**Solutions:**

1. **Use production build:**
   ```bash
   npm run build
   ```

2. **Cache configuration:**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Optimize autoloader:**
   ```bash
   composer dump-autoload -o
   ```

---

## 📝 Development Tips

### Always Have Two Terminals Open

**Terminal 1:** Vite Dev Server
```bash
npm run dev
```

**Terminal 2:** Laravel commands
```bash
php artisan migrate
php artisan db:seed
etc.
```

---

### After Making Changes

**After changing routes:**
```bash
php artisan route:clear
```

**After changing config:**
```bash
php artisan config:clear
```

**After changing .env:**
```bash
php artisan config:clear
```

**After installing packages:**
```bash
composer dump-autoload
```

---

## 🆘 Still Having Issues?

### Check Laravel Logs

Location: `storage/logs/laravel.log`

Look at the most recent error messages.

### Enable Debug Mode

In `.env`:
```
APP_DEBUG=true
```

**Warning:** Only use this in development, never in production!

### Check Browser Console

1. Press F12
2. Go to Console tab
3. Look for red error messages
4. Note the error and search for solution

---

## 📞 Quick Commands Reference

| Task | Command |
|------|---------|
| Clear all caches | `php artisan optimize:clear` |
| Run migrations | `php artisan migrate` |
| Seed database | `php artisan db:seed` |
| Create storage link | `php artisan storage:link` |
| Start dev server | `npm run dev` |
| Build for production | `npm run build` |
| List all routes | `php artisan route:list` |
| Create admin user | `php artisan make:filament-user` |

---

## ✅ Verification Checklist

After fixing issues, verify:

- [ ] Can access http://npsc.test/
- [ ] Can access http://npsc.test/admin/login
- [ ] Can login to admin panel
- [ ] Homepage shows without errors
- [ ] News page works
- [ ] Contact form works
- [ ] Mobile menu opens/closes
- [ ] Images display correctly
- [ ] All links work

---

**If you're still experiencing issues, check `storage/logs/laravel.log` for detailed error messages.**
