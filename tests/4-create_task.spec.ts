import { test, expect } from '@playwright/test';
import { login } from './loginfunction.spec';

test('createTask', async ({ page }) => {
    // Step 1: Navigate to the create task page
    await page.goto('http://127.0.0.1:8000/tasks/create');
    
    // Step 2: Handle the redirect to the login page
    await login(page, 'test@example.com', '12345678');

    // Ensure we are redirected back to the create task page after login
    await page.waitForURL('http://127.0.0.1:8000/tasks/create');

    // Step 3: Fill in the task form
    await page.getByLabel("Task Name").fill('Mobile app TP03');
    await page.getByLabel("Description").fill('Home page design');
    
    // Step 4: Click the "Create task" button
    await page.click('button[type="submit"]');

    // Step 5: Verify that we are redirected to the tasks list page and our new task is present
    await page.waitForURL('http://127.0.0.1:8000/tasks');
    
    await expect(page.locator('text=Task Created')).toBeVisible();

});
