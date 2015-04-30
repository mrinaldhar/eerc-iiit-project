<!-- Burnt Clay Brick Masonry House -->
<!-- Economic Loss-Inducing Factors related to the Non-Structural Elements -->

<form action="page1-backend.php" method="" onsubmit="return false;">

<!-- 1 -->
<p>1. Acceleration and Displacement Hazards</p>

<p>1.1 Shelves</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_1-1[]" value="a" id='_1-1_a_-5'> Not anchored to structural system
<input type="checkbox" name="_1-1[]" value="b" id='_1-1_b_-5'> Contents not strapped

<p>1.2 Items on lofts</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_1-2[]" value="a" id='_1-2_a_-5'> Unsecured

<p>1.3 Hangings from roof/floor and from walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_1-3[]" value="a" id='_1-3_a_-5'> Heavy weight and unstrapped

<p>1.4 Gas cylinders and geysers</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_1-4[]" value="a" id='_1-4_a_-5'> Unsecured to the wall

<p>1.5 Items on adjacent building</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_1-5[]" value="a" id='_1-5_a_-5'> Unsecured to the adjacent building

<!-- 2 -->
<p>2. Lifelines</p>

<p>2.1 Electric supply</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_2-1[]" value="a" id='_2-1_a_-5'> Cable is taught between house and pole

<p>2.2 Water supply</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_2-2[]" value="a" id='_2-2_a_-5'> Pipeline is rigidly held between house and mainline

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
