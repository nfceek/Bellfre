"""
Bellfre Example Agent Tool
Calculator Tool v0.1

Purpose:
    Provides basic arithmetic operations for an AI agent.

Future:
    This interface can become the standard Bellfre Tool contract.
"""


class Calculator:
    """
    Basic calculator tool.
    """

    name = "calculator"
    description = "Performs basic arithmetic calculations."

    def execute(self, operation, a, b):
        """
        Execute a calculation.

        Args:
            operation (str): add, subtract, multiply, divide
            a (float): first number
            b (float): second number

        Returns:
            dict: structured tool response
        """

        try:
            if operation == "add":
                result = a + b

            elif operation == "subtract":
                result = a - b

            elif operation == "multiply":
                result = a * b

            elif operation == "divide":
                if b == 0:
                    return {
                        "success": False,
                        "error": "Cannot divide by zero"
                    }

                result = a / b

            else:
                return {
                    "success": False,
                    "error": f"Unknown operation: {operation}"
                }

            return {
                "success": True,
                "tool": self.name,
                "operation": operation,
                "input": {
                    "a": a,
                    "b": b
                },
                "result": result
            }

        except Exception as e:
            return {
                "success": False,
                "error": str(e)
            }


# Standalone test
if __name__ == "__main__":

    calc = Calculator()

    tests = [
        ("add", 10, 5),
        ("subtract", 10, 5),
        ("multiply", 10, 5),
        ("divide", 10, 5)
    ]

    for operation, a, b in tests:
        print(calc.execute(operation, a, b))