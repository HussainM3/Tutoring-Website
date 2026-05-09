import { test, expect } from '@playwright/test';

test('homepage smoke test', async ({ page }) => {
  // 1. Go to local PHP server 
  await page.goto('http://localhost:8000');

  // 2. Check the "Spine of the book" (Browser Tab)
  await expect(page).toHaveTitle(/SM Math Academy/);

  // 3. Check the "Cover of the book" (Visible Heading)
  // This looks for an <h1>, <h2>, etc., that contains "SM Math Academy"
  await expect(page.getByRole('heading', { name: 'SM Math Academy' })).toBeVisible();
});

test('contact page loads correctly', async ({ page }) => {
  await page.goto('http://localhost:8000/contact.php');

  // Verify the form is actually there
  // Using 'role' is much better than checking for "bold" or CSS classes
  await expect(page.getByRole('heading', { name: 'Contact Details' })).toBeVisible();
  await expect(page.getByRole('button', { name: 'Send Email' })).toBeVisible();
});