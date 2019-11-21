import Shuffle from 'shufflejs/dist/shuffle'

export default {
  init() {
    // JavaScript to be fired on the about us page

    //var Shuffle = window.Shuffle;
    console.log(Shuffle);
    var element = $('.movies-wrap');
    var sizer = ('.movie');

    var shuffleInstance = new Shuffle(element, {
      itemSelector: '.movie',
      sizer: sizer, // could also be a selector: '.my-sizer-element'
    });

    $('.sort-options').change(function (evt) {
      var value = evt.target.value;
    
      function sortByDate(element) {
        return $(element).data('date');
      }
    
      function sortByName(element) {
        return $(element).data('name').toLowerCase();
      }
    
      var options;
      if (value === 'date') {
        options = {
          by: sortByDate,
        };
      } else if (value === 'name') {
        options = {
          by: sortByName,
        };
      } else {
        options = {};
      }
    
      shuffleInstance.sort(options);
    });

  },
};
