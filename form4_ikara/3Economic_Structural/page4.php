
<!-- Economic Loss-Inducing Factors related to the house construction - Page 4 -->

<form action="page4-backend.php" method="" onsubmit="return false;">


<p>5. Construction Details</p>
<p>5.1 Type of materials</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-1[]" value="a" id='_5-1_a_-5'> Low quality untreated wood<br>
<input type="checkbox" name="_5-1[]" value="b" id='_5-1_b_-5'> Wood susceptible to termite/fungi/other pest actions.<br>


<p> 5.2 Workmanship </p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_5-2[]" value="a" id='_5-2_a_-5'> Poor geometries of wood posts,rafters and purlins.<br>
<input type="checkbox" name="_5-2[]" value="b" id='_5-2_b_-5'> Informal joinery between wood components .<br>
<input type="checkbox" name="_5-2[]" value="c" id='_5-2_c_-5'> Formal procedures of construction


<br>
<button onclick="show()">Show</button>
</form>

<script>
$('input').click(function() {  
    section = this.name.split('-')[0].split('_')[1]
    console.log("section"+section);
        scores[section] += parseInt(this.id.split('_')[3]);
    console.log("score"+this.id.split('_')[3]);
      if (scores[section] <= formvals[page_loaded][section]) {
        scores[section] = formvals[page_loaded][section];
    }
    console.log(scores);
});
</script>