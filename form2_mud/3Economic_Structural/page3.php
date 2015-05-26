
<!-- Economic Loss-Inducing Factors related to the house construction -Page 3 -->

<form action="page3-backend.php" method="" onsubmit="return false;">

<p>3. Architectural Features</p>
<p>3.3 Walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-3[]" value="a" id='_3-3_a_-5'> Small wall density
<input type="checkbox" name="_3-3[]" value="b" id='_3-3_b_-5'> Upper storey walls not placed over those on lower storeys
<input type="checkbox" name="_3-3[]" value="c" id='_3-3_c_-5'> Large window openings
<input type="checkbox" name="_3-3[]" value="d" id='_3-3_d_-5'> Large door openings

<!-- 3.3 given twice in the pdf, please check before using stuff -->

<p>3.4 Location of door and window openings in walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-4[]" value="a" id='_3-4_a_-5'> Rare single window close to corners
<input type="checkbox" name="_3-4[]" value="b" id='_3-4_b_-5'> About half of openings close to corners
<input type="checkbox" name="_3-4[]" value="c" id='_3-4_c_-5'> Almost all openings close to corners
<input type="checkbox" name="_3-4[]" value="d" id='_3-4_d_-5'> Large window openings
<input type="checkbox" name="_3-4[]" value="e" id='_3-4_e_-5'> Large door openings

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