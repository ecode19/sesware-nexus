import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                content: ['Roboto,serif'],
                headimg: ['Merriweather,serif'],
            },
            height:{
                banner:"70vh",
                img:"300px",
                half:"200px",
                bgdesign:"350px",
                nav:"90vh"
            },
            width:{
                service:"90%",
                mobile:"85%",
                navsmall:"88%",
                year:"10%",
                project:"30%",
                details:"50%",
                link:"20%",
                nav:"20%",
            },
            margin:{
                banner:"10%",
                servicebanner:"12%",
                top:"4%",
                small:"2%",
                navmargin:"20%",
                dash:"80%",
                // nav:"30%",
                nav:"900px",
                navv:"100%"
            },
            padding:{
                banner:"10%",
                top:"4.4%",
                bs:"6%",
                mob:"4px"
            },
            fontSize :{
                headimg:"50px",
                mobilehead:"25px",
                lg:"20px",
                md:"17px"
               },
               colors:{
                p:"#080b61",
                hd:"#581c87",
                pup:"#8401e7",
                div:"rgb(238, 165, 247)",
               },
               borderRadius:{
                circle:"50%",
               }
        },
    },
    plugins: [],
};
