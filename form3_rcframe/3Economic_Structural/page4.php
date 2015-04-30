
<!--Economic Loss-Inducing Factors related to the house construction - Page 4 -->

<form action="page4-backend.php" method="" onsubmit="return false;">
<!-- 3.3 given twice in the pdf, please check before using stuff -->



<p>3.5 Parapets, objects on roof or Projections</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-5[]" value="a" id='_3-5_a_-5'> Not secured to the structural system
<br><input type="checkbox" name="_3-5[]" value="b" id='_3-5_b_-5'> Large and heavy projections and overhangs
<br>

<p>3.6 Staircases</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-6[]" value="a" id='_3-6_a_-5'> Narrow
<br><input type="checkbox" name="_3-6[]" value="b" id='_3-6_b_-5'> Too few in number
<br><input type="checkbox" name="_3-6[]" value="c" id='_3-6_c_-5'> Too far to reach
<br>

<br>
<button onclick="window.openTab(5)">Next page</button>
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
