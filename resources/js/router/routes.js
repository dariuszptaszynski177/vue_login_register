import Login from '../components/auth/Login';
import Register from '../components/auth/Register';

import Home from '../components/static/Home';

export default [
    { path: "/", component: Home, name: "home" },
    { path: "/login", component: Login, name: "login", meta: { requiresGuest: true } },
    { path: "/register", component: Register, name: "register", meta: { requiresGuest: true } }
]