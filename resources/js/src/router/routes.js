//public
import PublicLayout from "@/layouts/PublicLayout.vue";
import Home from "@/pages/Home.vue";
import Contact from "@/pages/Contact.vue";
import About from "@/pages/About.vue"
//admin
import AdminLayout from "@/layouts/AdminLayout.vue";
import AdminAbout from "@/admin/pages/About.vue";
import AdminContact from "@/admin/pages/Contact.vue"
import AdminCategories from "@/admin/pages/Categories.vue"
import AdminPosts from "@/admin/pages/Posts.vue"
//auth

const routes = [
    {
        path: '/',
        component: PublicLayout,
        children: [
            {
                path: '',
                component: Home,
            },
            {
                path: '/contact',
                component: Contact,
            }
            ,
            {
                path: '/about',
                component: About,
            }
        ]
    },
    {
        path: '/admin',
        component: AdminLayout,
        children: [
            {
                path: 'about',
                component: AdminAbout,
            },
            {
                path: 'contact',
                component: AdminContact,
            },
            {
                path: 'categories',
                component: AdminCategories,
            },
            {
                path: 'posts',
                component: AdminPosts,
            },
        ],
    }

]

export default routes;
