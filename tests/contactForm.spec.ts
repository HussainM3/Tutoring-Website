import { test, expect } from '@playwright/test';

test('email form validation', async ({ page }) => {
    await page.goto('http://localhost:8000/contact.php');

    // Try submitting the form without filling it out
    await page.click('button:has-text("Send Email")');
    // Check for validation error messages
    await expect(page.getByText('Please enter your name.')).toBeVisible();
    await expect(page.getByText('Please enter a valid email address.')).toBeVisible();
    await expect(page.getByText('Please share a few details about the tutoring support needed.')).toBeVisible();
    await expect(page.getByText('Please select a student level.')).toBeVisible();
    await expect(page.getByText('Please enter your phone number.')).toBeVisible();

    // Fill out the form with valid data
    await page.fill('input[id="name"]', 'Test User');
    await page.fill('input[id="email"]', 'test@example.com');
    await page.fill('input[id="phone"]', '123-456-7890');
    await page.selectOption('select[id="student_level"]', 'High school algebra, functions, and exam prep');
    await page.fill('textarea[id="message"]', 'This is a test message.');
    await page.click('button:has-text("Send Email")');

    // click yes on confirmation dialog (modal)
    await page.click('button:has-text("Yes")');

    // Check for success message or redirection
    await expect(page.getByText('Email sent successfully!')).toBeVisible();
});
