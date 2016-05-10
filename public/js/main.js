// Instagram API

// $(document).ready(function () {
 
//   $('#selector').pongstgrm({
//     accessId:     id,
//     accessToken:  token,
//     count: '4',
//   });
//   $('#selector').pongstgrm({ show: 'resent'});

//   $('#recentWork').pongstgrm({
//     accessId:     id,
//     accessToken:  token,
//     count: '12',
//   });
//   $('#recentWork').pongstgrm({ show: 'lasercutting'});
 
// });

$(document).ready(function () {

      $('#selector').pongstgrm({
        accessId:     id,   
        accessToken:  token,
        count: '12',
      });

      $('#selector').pongstgrm({ show: 'recent' });
      $('#selector').pongstgrm({ show: 'feed' });

    });