<div id="left_div">
    <form action="" method="GET">
        <div class="left_div-topl">
            <label><i>*</i>Date:</label>
            <!-- Put default date with js -->
            <input id="date" type="date" name="date" value="" required />
        </div>
        <div class="left_div-topr">
            <label><i>*</i>Time:</label>
            <!-- Put default time with js -->
            <input type="time" name="time" value="" required />
        </div>
        <div class="left_div-midt">
            <label><i>*</i>Description:</label>
            <textarea rows="6" cols="52" name="message" placeholder="We scheculed football game to the specified time, join us!" required></textarea>
        </div>
        <div class="left_div-midb">
            <label><i>*</i>Number of players:</label>
            <input type="number" name="number" min="5" max="9" value="5" required />
        </div>
        <input type="submit" name="create" value="Create" class="left_div-submit" />
    </form>
</div>