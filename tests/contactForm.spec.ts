import { test, expect } from '@playwright/test';

test('email form validation', async ({ page }) => {
    await page.goto('http://localhost:8000/contact.php');

    // 1. Validation Check
    await page.getByRole('button', { name: 'Send Email' }).click();

    // Check for validation error messages
    await expect(page.getByText('Please enter your name.')).toBeVisible();
    await expect(page.getByText('Please enter a valid email address.')).toBeVisible();
    await expect(page.getByText('Please share a few details about the tutoring support needed.')).toBeVisible();
    await expect(page.getByText('Please select a student level.')).toBeVisible();
    await expect(page.getByText('Please enter your phone number.')).toBeVisible();

    // Fill out the form with valid data
    await page.getByLabel('Name').fill('Test User');
    await page.getByLabel('Email').fill('test@example.com');
    await page.getByLabel('Phone').fill('123-456-7890');
    await page.getByLabel('Student Level').selectOption('High school algebra, functions, and exam prep');
    await page.getByLabel('How can we help you?').fill('This is a test message.');
    await page.getByRole('button', { name: 'Send Email' }).click();

    // click yes on confirmation dialog (modal)
    await page.getByRole('button', { name: 'Yes' }).click();

    // Check for success message or redirection
    await expect(page.getByText('Email sent successfully!')).toBeVisible();
});
