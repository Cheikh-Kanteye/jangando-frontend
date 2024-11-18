<?php
// Liste d'événements (données fictives)
$events = [
  [
    'title' => 'Annual Science Fair',
    'description' => 'An exhibition showcasing scientific innovations.',
    'startDate' => '2024-11-25',
    'endDate' => '2024-11-26',
  ],
  [
    'title' => 'Music Fest 2024',
    'description' => 'Live performances by local and international artists.',
    'startDate' => '2024-12-10',
    'endDate' => '2024-12-12',
  ],
  [
    'title' => 'Career Fair',
    'description' => 'Opportunities for students to meet industry leaders.',
    'startDate' => '2025-01-15',
    'endDate' => '2025-01-15',
  ],
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Events</h2>
    <div class="row">
      <div class="row search-input">
        <i class="ri-search-line"></i>
        <input
          type="text"
          placeholder="Search events..."
          name="search"
          id="search" />
      </div>
      <button><i class="ri-equalizer-line"></i></button>
      <button><i class="ri-sort-desc"></i></button>
      <button class="add-btn" type="button"><i class="ri-add-line"></i></button>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($events as $event): ?>
        <tr>
          <td><?= htmlspecialchars($event['title']); ?></td>
          <td><?= htmlspecialchars($event['description']); ?></td>
          <td><?= htmlspecialchars($event['startDate']); ?></td>
          <td><?= htmlspecialchars($event['endDate']); ?></td>
          <td class="row">
            <button><i class="ri-edit-box-line"></i></button>
            <button><i class="ri-delete-bin-6-line"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>