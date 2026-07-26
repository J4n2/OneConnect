# Source Control Bug Fixes - TODO

## Steps

### Phase 1: Fix Missing Views
- [x] Create `resources/views/dashboard.blade.php`
- [x] Create `resources/views/auth/login.blade.php`
- [x] Create `resources/views/auth` directory structure

### Phase 2: Fix Git Configuration
- [x] Add `OneConnect/` to `.gitignore`
- [x] Fix CRLF/LF line-ending conflict in `routes/web.php`
- [x] Run `git add --renormalize .` to normalize all line endings
- [x] Stage all changes

### Phase 3: Clean Repository
- [ ] Commit the staged changes with a descriptive message
- [ ] Run `git gc` to clean dangling blobs
- [ ] Verify with `git status` and `git fsck`

