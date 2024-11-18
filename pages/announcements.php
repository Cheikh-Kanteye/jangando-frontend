<?php
$announcements = [
  [
    'title' => 'Holiday Announcement',
    'description' => 'The school will be closed for the holidays from December 20th to January 5th.',
    'date' => '2024-12-10',
  ],
  [
    'title' => 'New Semester Start',
    'description' => 'The new semester will begin on January 10th. Please be ready with your assignments.',
    'date' => '2024-12-15',
  ],
  [
    'title' => 'Exam Results',
    'description' => 'The exam results will be announced on December 25th.',
    'date' => '2024-12-20',
  ],
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Announcements</h2>
    <div class="row">
      <div class="row search-input">
        <i class="ri-search-line"></i>
        <input
          type="text"
          placeholder="Search from table..."
          name="search"
          id="search" />
      </div>
      <button><i class="ri-equalizer-line"></i></button>
      <button><i class="ri-sort-desc"></i></button>
      <button type="button" class="add-btn"><i class="ri-add-line"></i></button>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($announcements as $announcement): ?>
        <tr>
          <td><?= htmlspecialchars($announcement['title']); ?></td>
          <td><?= htmlspecialchars($announcement['description']); ?></td>
          <td><?= htmlspecialchars($announcement['date']); ?></td>
          <td class="row">
            <button><i class="ri-edit-box-line"></i></button>
            <button><i class="ri-delete-bin-6-line"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="form-container">
  <form>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" />
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" id="description"></textarea>
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input type="date" name="date" id="date" />
    </div>
    <button type="submit">Add Announcement</button>
  </form>
</div>