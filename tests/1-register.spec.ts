import { test, expect } from '@playwright/test';

test('register', async ({ page }) => {

    // ======== Step1 ========
    await page.goto('http://127.0.0.1:8000/register');

    // ======== Step2 ========
    // ------- Name
    await page.getByLabel("Name").fill("test");

    // ------- Email
    await page.getByLabel("E-Mail Address").fill("test1@example.com");

    // ------- Password
    await page.getByLabel("Password", {exact: true}).fill("12345678");

    // ------- Confirm Password
    await page.getByLabel("Confirm Password").fill("12345678");
    
    // ======== Step3 ========
    // Submit the registration form (this depends on your form's implementation)
    await page.click('button[type="submit"]');

    // ======== Step4 ========
    // Assert that user can see "You are logged in!"
    await expect(page.getByText("You are logged in!")).toBeVisible();

});
