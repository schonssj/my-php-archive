<?php
// The Session Hijacking attack occurs when a malicious user tries to discover the session id and manipulate it to obtain information associated with another session id.
session_start();
// After checking the login, destroy the session id and generate it again.
session_destroy();
session_start();
session_regenerate_id();
