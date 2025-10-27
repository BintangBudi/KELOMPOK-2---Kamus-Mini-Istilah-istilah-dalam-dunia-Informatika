<?php
require_once "functions/semuaIstilah.php";
require_once "functions/cari.php";

$i = 1;
$keyword = $_GET["keyword"] ?? '';

if (!empty($keyword)) {
    $items = cari($keyword);
} else {
    $items = semuaIstilah();
}

if (empty($items)) {
    echo '<tr><td colspan="4" style="text-align: center; padding: 2rem; font-style: italic;">Istilah tidak ditemukan.</td></tr>';
} else {
    foreach ($items as $item): ?>
        <tr>
            <td><?= $i ?></td>
            <td data-label="Istilah"><?= htmlspecialchars($item["istilah"]) ?></td>
            <td data-label="Definisi"><?= htmlspecialchars($item["definisi"]) ?></td>
            <td data-label="Aksi">
                <button class="btn btn-edit" data-id="<?= $item['id'] ?>">Edit</button>
                <button class="btn btn-hapus" data-id="<?= $item['id'] ?>">Hapus</button>
            </td>
        </tr>
        <?php $i++; ?>
    <?php endforeach;
}
?>