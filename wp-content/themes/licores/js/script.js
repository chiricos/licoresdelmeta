$(document).on("ready",function()
{
   $('nav .empresa').on('mouseover',function()
   {
      $('.menu-empresa').removeClass('hidden');
   });
   $('nav .empresa').on('mouseout',function()
   {
      $('.menu-empresa').addClass('hidden');
   });
   $('.menu-empresa').on('mouseover',function()
   {
      $('.menu-empresa').removeClass('hidden');
   });
   $('.menu-empresa').on('mouseout',function()
   {
      $('.menu-empresa').addClass('hidden');
   });



   $('nav .productos').on('mouseover',function()
   {
      $('.menu-productos').removeClass('hidden');
   });
   $('nav .productos').on('mouseout',function()
   {
      $('.menu-productos').addClass('hidden');
   });
   $('.menu-productos').on('mouseover',function()
   {
      $('.menu-productos').removeClass('hidden');
   });
   $('.menu-productos').on('mouseout',function()
   {
      $('.menu-productos').addClass('hidden');
   });

});