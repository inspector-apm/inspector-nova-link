Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'inspector-nova-link',
            path: '/inspector-nova-link',
            component: require('./components/Tool'),
        },
    ])
})
