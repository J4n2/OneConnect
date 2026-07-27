# Project Fixes - Master TODO

## Phase 1: Fix Critical Application Bugs
- [x] Fix `AuthenticatedSessionController::store()` - add `Auth::attempt()` call
- [x] Create `AppLayout` View Component (PHP class + Blade layout)
- [x] Create `GuestLayout` View Component (PHP class + Blade layout)
- [x] Create missing Blade component views (auth-session-status, input-label, text-input, input-error, primary-button, application-logo, nav-link)
- [x] Create `layouts/navigation.blade.php`
- [x] Create `resources/css/app.css` with Tailwind directives
- [x] Create `resources/js/app.js` with Alpine.js setup
- [x] Create `resources/js/bootstrap.js`

## Phase 2: Fix Source Control (Git)
- [ ] Remove untracked `files_diff.txt`
- [ ] Add all new/updated files to git
- [ ] Commit changes
- [ ] Push branch to remote

## Phase 3: Fix Laravel Structure
- [x] Fix `vite.config.js` to include `@tailwindcss/vite` plugin
- [x] Fix `welcome.blade.php` navigation links

## Phase 4: Cleanup & Verify
- [ ] Run `composer install` and `npm install`
- [ ] Verify git status is clean
- [ ] Mark all tasks complete

