import { Page } from 'playwright';

export async function login(page: Page, email: string, password: string): Promise<void> {
    // Navigate to the login page
    await page.goto('http://127.0.0.1:8000/login');

    // Fill the email and password fields
    await page.getByLabel("E-Mail Address").fill(email);
    await page.getByLabel("Password", { exact: true }).fill(password);

    // Submit the form
    await page.click('button[type="submit"]');
}
