<form method="GET">
    <div>
        Delimiter:
        <select name="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names">
    </div>
    <div>
        Ages:
        <input type="text" name="ages">
    </div>
    <div>
        <input type="submit" name="filter" value="Filter!">
    </div>
    <?php if (isset($names, $ages)): ?>
        <table border="1" cellpadding="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($names); $i++): ?>
                    <?php if ($ages[$i] >= 18): ?>
                        <tr>
                            <td><?= $names[$i] ?></td>
                            <td><?= $ages[$i] ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endfor; ?>
            </tbody>
        </table>
    <?php endif; ?>
</form>