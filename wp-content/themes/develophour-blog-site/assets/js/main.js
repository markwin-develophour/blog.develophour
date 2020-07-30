const $card = $('.card');
const newsSectionAnimation = new TimelineMax({paused:true});
const controller = new ScrollMagic.Controller({});
const $landingTitle = $('.landing-title');
const $landingDescriptionn = $('.landing-description');

$(window).on('load', function() {
    $card.each(function(i) {
        const $this = $card.eq(i);
    
        new ScrollMagic.Scene({
            triggerElement: $this[0],
            triggerHook: 'onEnter',
            offset: 200
        })
            .setClassToggle($this[0], 'is-shown')
            .addTo(controller);
    })

    $landingTitle.addClass('is-shown');
    $landingDescriptionn.addClass('is-shown');
})
