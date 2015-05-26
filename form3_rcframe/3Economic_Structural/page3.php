
<!-- Economic Loss-Inducing Factors related to the house construction -Page 3 -->

<form action="page3-backend.php" method="" onsubmit="return false;">

<p>3. Architectural Features</p>
<p>3.3 Door and Window Openings in Walls</p>
<p>(You may select 0 or more.)</p>
<input type="checkbox" name="_3-3[]" value="a" id='_3-3_a_-5'> Rare single window close to corners
<br><input type="checkbox" name="_3-3[]" value="b" id='_3-3_b_-5'> About half of openings close to corners
<br><input type="checkbox" name="_3-3[]" value="c" id='_3-3_c_-5'> Almost all openings close to corners
<br><input type="checkbox" name="_3-3[]" value="d" id='_3-3_d_-5'> Large area window openings
<br><input type="checkbox" name="_3-3[]" value="e" id='_3-3_e_-5'> Large area door openings
<br>

<!-- 3.3 given twice in the pdf, please check before using stuff -->

<p>3.4 Distance from adjacent building</p>
<input type="radio" name="_3-4" value="a" id='_3-4_a_-5'> Houses touch each other.
<input type="radio" name="_3-4" value="b" id='_3-4_b_-5'> Houses have insufficient gap between them.
<input type="radio" name="_3-4" value="c" id='_3-4_c_-5' checked> None of the Above


<br>
<button onclick="window.openTab(4)">Next page</button>
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