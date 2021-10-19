1. build environment done
2. install laravel-admin done
3. install inertia, tailwindcss done
4. install and study passport done
5. study websocket, heroKu done
6. study line done

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

- api: https://boiling-reaches-89470.herokuapp.com/
- admin: https://boiling-reaches-89470.herokuapp.com/admin
- vite: https://poper-vite.herokuapp.com/