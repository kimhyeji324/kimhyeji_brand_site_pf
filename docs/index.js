console.clear();

function Fullpage__init() {
  new fullpage('#fullpage', {
    sectionsColor: ['#010101', '#010101', '#010101', '#010101'],
    /*중간 스크롤*/
    scrollOverflow:true,
    /*요소 중앙 정렬 off*/
    verticalCentered:false,
  });

  // 기존 섹션을 다시 활성화 하여, 최초에도 애니메이션이 발동 하도록
  const $current = $('#fullpage .section.fp-section.active');
  $current.removeClass('active');
  setTimeout(function() {
    $current.addClass('active');
  });
}

Fullpage__init();