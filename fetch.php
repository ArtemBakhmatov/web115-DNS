<script>
   fetch("text.txt?name=bobik")
   .then(ok=>ok.json())
   .then(data=>console.log(data));
  
//   $.ajax({
//       url:"text.txt",
//       data:{
//           name:"bobik"
//       },
//       success:data=>{
//           console.log(data);
//       }
//   })
</script>