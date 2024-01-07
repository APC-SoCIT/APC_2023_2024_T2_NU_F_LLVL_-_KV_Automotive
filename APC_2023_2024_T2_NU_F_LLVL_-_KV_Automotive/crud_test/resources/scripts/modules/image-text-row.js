
enterView({
  selector: '.image-text-row',
  offset: 0.5,
  enter: (element) => {
    element.classList.add('reveal')
  }
})