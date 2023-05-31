# Assumption: The order of elements in the array should be maintained.

def remove_duplicates(array):
    """
    Removes duplicate values from an array.

    Args:
        arr (list): The input array.

    Returns:
        list: The array with duplicate values removed.
    """
    # Create an empty set to store unique values
    unique_values = set()

    # Create a new list to store the result
    result = []

    # Iterate over each element in the array
    for value in array:
        # Check if the value is already seen (i.e., it's a duplicate)
        if value in unique_values:
            continue  # Skip the current iteration if it's a duplicate

        # Add the value to the set of unique values
        unique_values.add(value)

        # Append the value to the result list
        result.append(value)

    return result

# Test the function
arr = [1, 2, 2, 3, 2, 3, 4, 5, 4, 1, 4, 5]
result = remove_duplicates(arr)
print(result)