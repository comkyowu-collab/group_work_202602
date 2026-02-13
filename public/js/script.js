const items = document.querySelectorAll('.item');
const filter = 'アクション'; // ユーザー選択の例

items.forEach(item => {
  if(item.dataset.genre !== filter){
    item.style.display = 'none';
  }
});