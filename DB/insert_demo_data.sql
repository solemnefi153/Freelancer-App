INSERT INTO users VALUES (
  nextval('users_sequence'),
  (SELECT role_id from roles WHERE description = 'admin'),
  'freelanceAdmin',
  'freelanceAdmin1',
  'Freelance Administration',
  'Nefi',
  'Aguilar'
);