<!DOCTYPE html>
<html>
<head>
    <title>Random SMTP Configuration</title>
</head>
<body>
    <h1>Random SMTP Configuration</h1>

    <form method="POST">
        <label for="smtp">Select SMTP Configuration:</label>
        <select id="smtp" name="smtp">
            <?php foreach ($smtpConfigs as $config): ?>
                <option value="<?= htmlspecialchars($config['id']) ?>">
                    <?= htmlspecialchars($config['host']) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Save</button>
    </form>

    <?php if ($randomSmtp): ?>
        <h2>Randomly Selected SMTP Configuration</h2>
        <p>Host: <?= htmlspecialchars($randomSmtp['host']) ?></p>
        <p>Port: <?= htmlspecialchars($randomSmtp['port']) ?></p>
        <p>Encryption: <?= htmlspecialchars($randomSmtp['encryption']) ?></p>
        <p>Username: <?= htmlspecialchars($randomSmtp['username']) ?></p>
    <?php endif; ?>

    <?php if ($this->flashBag->has('success')): ?>
        <div class="flash-success">
            <?= htmlspecialchars($this->flashBag->get('success')[0]) ?>
        </div>
    <?php endif; ?>

    <?php if ($this->flashBag->has('error')): ?>
        <div class="flash-error">
            <?= htmlspecialchars($this->flashBag->get('error')[0]) ?>
        </div>
    <?php endif; ?>
</body>
</html>
