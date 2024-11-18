<?php
$attendances = [
  [
    'title' => 'Annual Meeting',
    'description' => 'Yearly staff meeting to discuss goals',
    'start_date' => '2024-12-01',
    'end_date' => '2024-12-01',
  ],
  [
    'title' => 'Training Session',
    'description' => 'Training for new software implementation',
    'start_date' => '2024-11-25',
    'end_date' => '2024-11-25',
  ],
  [
    'title' => 'Holiday Break',
    'description' => 'Office closed for holidays',
    'start_date' => '2024-12-24',
    'end_date' => '2024-12-31',
  ],
  [
    'title' => 'Seminar on Innovation',
    'description' => 'Guest seminar on new technologies',
    'start_date' => '2024-11-30',
    'end_date' => '2024-11-30',
  ],
  [
    'title' => 'Team Building',
    'description' => 'Team-building activities and outdoor events',
    'start_date' => '2024-12-15',
    'end_date' => '2024-12-16',
  ]
];
?>

<div class="flex-1 table-container">
  <div class="row row-between">
    <h2>All Attendances</h2>
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
        <th>Start Date</th>
        <th>End Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($attendances as $attendance): ?>
        <tr>
          <td><?= htmlspecialchars($attendance['title']); ?></td>
          <td><?= htmlspecialchars($attendance['description']); ?></td>
          <td><?= htmlspecialchars($attendance['start_date']); ?></td>
          <td><?= htmlspecialchars($attendance['end_date']); ?></td>
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
  <form method="POST">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" placeholder="e.g., Annual Meeting" required />
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" name="description" id="description" placeholder="e.g., Yearly staff meeting to discuss goals" required />
    </div>
    <div class="form-group">
      <label for="start_date">Start Date</label>
      <input type="date" name="start_date" id="start_date" required />
    </div>
    <div class="form-group">
      <label for="end_date">End Date</label>
      <input type="date" name="end_date" id="end_date" required />
    </div>
    <button type="submit">Add Attendance</button>
  </form>
</div>