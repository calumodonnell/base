###jslint browser: true, plusplus: true###
###global $, jQuery, alert###

fixedNav ->
  height = $('.header-background').height()
  width = $(window).width()

  if $(".home").length
    if $(window).scrollTop() > height
      $('primary-nav').addClass 'fixed'
      $('.logo-white').addClass 'hide'
      $('.logo').removeClass 'hide'
    else
      $('.primary-nav').removeClass 'fixed'
      $('.logo-white').removeClass 'hide'
      $('.logo').addClass 'hide'
  else
    $('.logo-white').addClass 'hide'
    $('.logo').removeClass 'hide'

$(window).load ->
  $('#loading-image').fadeOut()
  $('#loader').delay(400).fadeOut 'slow'
  $('body').delay(400).css 'overflow' : 'visible'

  $('.equal').matchHeight()

  fixedNav()

  $('#user_login').attr 'placeholder', 'Username'
  $('#user_pass').attr 'placeholder', 'Password'

  $('.ninja-forms-field').wrap ->
    '<span class="test"></span>'

$(document).ready ->
  $('.scroll-top').click ->
    $('html, body').animate { 'scrollTop: 0' }, 800
    false

  $('.btn-search').click ->
    $('.search-container').stop().slideToggle 'fast'

  $(window).scroll ->
    if ($(this).scrollTop() > 200)
      $('.scroll-top').addClass('show')
    else
      $('.scroll-top').removeClass('show')

  $('.scroll-top').click ->
    $('html, body').animate({scrollTop : 0}, 800)
    false

  $(window).scroll(fixedNav)
  $(window).resize(fixedNav)


  $animation_elements = $('.board')
  $window = $(window)

  showBoard = ->
    window_height = $window.height()
    window_top_position = $window.scrollTop()
    window_bottom_position = window_top_position + window_height

    $.each $animation_elements, ->
      $element = $(this)
      element_height = $element.outerHeight()
      element_top_position = $element.offset().top
      element_bottom_position = element_top_position + element_height

      if element_bottom_position >= window_top_position and element_top_position <= window_bottom_position
        $element.add('show')

  $window.on 'scroll resize', showBoard
  $window.trigger 'scroll'
