1. build environment done
2. install laravel-admin done
3. install inertia, tailwindcss done
4. install and study passport
5. study websocket, heroKu 
6. study line

Issue:

#### laravel-admin
```
// eager loading not work
$grid->model()->with(['relation_name'])
```

#### passport ~4.0 security flaw
passport token do not contain provider info
we can use student token login teacher account
however passport ~9.0 fixed this issue
sadly laravel5.5 only support  passport ~4.0
