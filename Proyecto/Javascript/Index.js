$(document).ready(function(e)
{
  $('#LoadPage').load("http://google.com",function(data)
{
  $(this).html(data);
});
});
