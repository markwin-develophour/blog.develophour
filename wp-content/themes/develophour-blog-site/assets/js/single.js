const $singleContent = $('#single-content');
const $singleContentChildren = $singleContent.children();
const controller = new ScrollMagic.Controller({});
const $singlePagination = $('#single-pagination');

$(window).on('load', function() {
    $singleContentChildren.each(function(i) {
        const $this = $singleContentChildren.eq(i);
    
        new ScrollMagic.Scene({
            triggerElement: $this[0],
            triggerHook: 'onEnter',
            offset: 100
        })
            .setClassToggle($this[0], 'is-shown')
            .addTo(controller);
    })

    new ScrollMagic.Scene({
        triggerElement: $singlePagination[0],
        triggerHook: 'onEnter',
        offset: 100
    })
        .setClassToggle($singlePagination[0], 'is-shown')
        .addTo(controller);
})