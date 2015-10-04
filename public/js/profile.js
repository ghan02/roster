var Foo = Vue.extend({
    template: '<p>This is foo!</p>'
})

var help = Vue.extend({
    template: '<p>Help Page </p>'
})


var App = Vue.extend({})


var router = new VueRouter({
	linkActiveClass:'active',
	transitionOnLoad:true,
	hashbang:false
})


router.map({
    '/foo': {
        component: Foo
    },
    '/help': {
        component: help
    }
})

// Now we can start the app!
router.start(App, '#profile');
